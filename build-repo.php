<?php

$context = stream_context_create([
	'http' => [
		'method' => 'GET',
		'header' => implode("\r\n", [
			'Accept-language: en',
			'User-Agent: Mikulas'
		]),
		'ignore_errors' => TRUE,
	]
]);

$raw = file_get_contents('https://api.github.com/repos/vrana/adminer/tags', FALSE, $context);
$tags = [];
foreach (json_decode($raw) as $node)
{
	$tags[] = $node->name;
}

$raw = file_get_contents('https://api.github.com/repos/Mikulas/adminer-package/tags', FALSE, $context);
$published = [];
foreach (json_decode($raw) as $node)
{
	$published[] = $node->name;
}

$raw  = file_get_contents('http://sourceforge.net/projects/adminer/rss');
$sub = simplexml_load_string($raw);
$json = json_encode($sub);
$files = json_decode($json, TRUE);

$newTags = array_diff($tags, $published);

foreach ($newTags as $tag)
{
	echo "\n\n$tag\n";
	$version = substr($tag, 1);
	$links = [];

	foreach ($files['channel']['item'] as $file)
	{
		if (strpos($file['link'], $version) !== FALSE
			&& strpos($file['link'], 'php/download') !== FALSE)
		{
			$match = [];
			preg_match('~/(?P<name>[^/]+?)-(?P<version>[^/-]+)(?P<type>[^/]*)\.php/download~', $file['link'], $match);
			$name = "$match[name]$match[type].php";
			$links[$name] = $file['link'] . '?r=&ts=' . time() . '&use_mirror=heanet';
		}
	}

	system('git branch -D ' . "b-$version");
	system('git checkout --orphan ' . "b-$version");
	foreach ($links as $name => $link)
	{
		echo "  downloading $name ($link)\n";
		$raw = file_get_contents($link);
		file_put_contents($name, $raw);
	}
	system("git add editor*");
	system("git add adminer*");
	system("git add composer.json");
	system("git rm -rf build-repo.php");
	system("git commit -m 'publish v$version'");
	system("git tag -d v$version");
	system("git tag -a v$version -m v$version");
	system("rm -rf editor*");
	system("rm -rf adminer*");
}

system("git push origin --tags");

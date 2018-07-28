<?php
require_once(__DIR__ . '/client/GitHubClient.php');

$owner = 'tan-tan-kanarek';
$repo = 'github-php-client';

$client = new GitHubClient();

$client->setPage();
$client->setPageSize(10);
$issues = $client->issues->listIssues($owner, $repo);

foreach ($issues as $issue)
{
    /* @var $issue GitHubIssue */
    echo get_class($issue) . "[" . $issue->getNumber() . "]: " . $issue->getTitle() . "\n";
}

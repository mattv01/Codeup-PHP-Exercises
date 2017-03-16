<?php 

$books = array(
	'The Hobbit' => array(
		'published' => 1937,
		'author' => 'J. R. R. Tolkien',
		'pages' => 310
	),
	'Game of Thrones' => array(
		'published' => 1996,
		'author' => 'George R. R. Martin',
		'pages' => 835
	),
	'The Catcher in the Rye' => array(
		'published' => 1951,
		'author' => 'J. D. Salinger',
		'pages' => 220
	),
	'A Tale of Two Cities' => array(
		'published' => 1859,
		'author' => 'Charles Dickens',
		'pages' => 544
	)
);


foreach ($books as $bookTitle => $bookDescription) {
	echo "$bookTitle was published in {$bookDescription['published']}, authored by {$bookDescription['author']}, and had {$bookDescription['pages']} pages." . PHP_EOL;
}


$output = "";
foreach ($books as $bookTitle => $bookDescription) {
	// echo "$bookTitle was published in {$bookDescription['published']}, authored by {$bookDescription['author']}, and had {$bookDescription['pages']} pages." . PHP_EOL;
	$output .= $bookTitle . PHP_EOL;
	foreach ($bookDescription as $key => $value) {
		$output .= "\t $key: $value" . PHP_EOL;
	}
	$output .=  PHP_EOL;
}
echo $output;


echo "These are the books published after 1950:" . PHP_EOL;
foreach ($books as $bookTitle => $bookDescription) {
	if ($bookDescription['published'] > 1950) {
		echo "$bookTitle was published in {$bookDescription['published']}, authored by {$bookDescription['author']}, and had {$bookDescription['pages']} pages." . PHP_EOL;
	}
}
<?php
    
    $quotes = [
        [
            'author' => 'Mother Teresa',
            'text' => 'Spread love everywhere you go. Let no one ever come to you without leaving happier.',
        ],
        [
            'author' => 'Franklin D. Roosevelt',
            'text' => 'When you reach the end of your rope, tie a knot in it and hang on.',
        ],
        [
            'author' => 'Margaret Mead',
            'text' => 'Always remember that you are absolutely unique. Just like everyone else.',
        ],
        [
            'author' => 'Robert Louis Stevenson',
            'text' => 'Dont judge each day by the harvest you reap but by the seeds that you plant.',
        ],
        [
            'author' => 'Eleanor Roosevelt',
            'text' => 'The future belongs to those who believe in the beauty of their dreams.',
        ],
    ];

    $quote = $quotes[array_rand($quotes)];
    $quoteText = $quote['text'];
    $quoteAuthor = $quote['author'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randomizing PHP</title>
</head>
<body>
    <blockquote>
        <h2>&ldquo;<?php echo $quoteText; ?>&rdquo;</h2>
        <strong>- <?php echo $quoteAuthor ?></strong>
    </blockquote>
</body>
</html>
<?php
// No direct access
defined('_JEXEC') or die;

// Display the content
//echo $customContent;

//echo "<pre>"; print_r($params);


?>

<style>
    /* CSS for article grid */
/* CSS for horizontal article layout */
.article-grid {
    display: flex;
    
    gap: 20px; /* Space between grid items */
    margin: 20px;
}

.article-item {
    min-width: 250px; /* Set a minimum width for each article item */
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin-top:15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.article-item:hover {
    transform: translateY(-5px); /* Slight hover effect */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.article-item h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.article-item a {
    color: #0073e6;
    text-decoration: none;
}

.article-item a:hover {
    text-decoration: underline;
}

.article-item p {
    font-size: 1em;
    color: #555;
}
</style>

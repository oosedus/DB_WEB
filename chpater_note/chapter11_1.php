<h2>1. Read from file</h2>

<?php
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object"); 
print_r($xml);
?>

<hr/>
<h2>2. Get node values</h2>
<?php
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;
?>

<hr/>
<h2>3. Get Node Values of Specific Elements</h2>
<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo $xml->book[0]->title . "<br>";
echo $xml->book[1]->title;
?>

<hr/>
<h2>4. Get Node Values - Loop</h2>
<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
echo $books->title . ", ";
echo $books->author . ", ";
echo $books->year . ", ";
echo $books->price . "<br>";
}
?>

<hr/>
<h2>5. Get Attribute Values</h2>
<?php
$xml=simplexml_load_file("books.xml") or die("Error:
Cannot create object");
echo $xml->book[0]['category'] . "<br>";
echo $xml->book[1]->title['lang'];
?>

<hr/>
<h2>6. Get Attribute Values - Loop</h2>
<?php
$xml=simplexml_load_file("books.xml") or die("Error:
Cannot create object");
foreach($xml->children() as $books) {
echo $books->title['lang'];
echo "<br>";
}
?>
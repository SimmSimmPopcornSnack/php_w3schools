<?php
// initialize xml parser
$parser = xml_parser_create();

// function to use at the start of an element
function start($parser, $element_name, $element_attrs) {
    switch($element_name) {
        case "NOTE":
            echo "-- Note --<br>";
            break;
        case "TO":
            echo "To: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "Heading: ";
            break;
        case "BODY":
            echo "Message: ";
            break;
    }
}

// function to use at the end of an element
function stop($parser, $element_name) {
    echo "<br>";
}

// function to user when finding character data
function char($parser, $data) {
    echo $data;
}

// specify element handler
xml_set_element_handler($parser, "start", "stop");

// specify data handler
xml_set_character_data_handler($parser, "char");

// open xml file
$fp = fopen("node.xml", "r");

// read data
while ($data = fread($fp, 4096)) {
    xml_parse($parser, $data, feof($fp)) or
    die (sprinf("XML Error: %s at line %d",
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)));
}

// free the xml parser
xml_parser_free($parser);
?>

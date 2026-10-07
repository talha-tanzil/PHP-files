<?php
//WordWrap in String
$string= "Lorem ipsum dolor sit amet consectetur adipisicingrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr elit. Inventore ipsa doloremque eaque est ex ipsam consequatur adipisci eos nemo praesentium.";
//echo wordwrap($String, 26);// ekhane 1-26 character porpor wrap hobe, kintu same word 26+ length hole wrap hobe na
// echo wordwrap ($string, 26, "\n", true);// eta (\n) dile vs code e wrap hobe, kintu website e sudhu 26letter porpor white space hobe, kintu new line e jabena
echo wordwrap ($string, 26, "<br/>", true); // ekhane newline create hobe website e

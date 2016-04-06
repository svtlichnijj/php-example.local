<ul class="contacts">
    <li><a href="#">+38 093 975-70-24</a></li>
    <li><a href="#">+38 093 944-45-23</a></li>
    <li><a href="#">+38 093 345-34-26</a></li>
    <li><a href="#">+38 093 234-67-23</a></li>
</ul>

<?php
    $input_html = '<ul class="contacts">
        <li><a href="#">+38 093 975-70-24</a></li>
        <li><a href="#">+38 093 944-45-23</a></li>
        <li><a href="#">+38 093 345-34-26</a></li>
        <li><a href="#">+38 093 234-67-23</a></li>
    </ul>';

    function phone_pattern($html_in) {
        $arMatches = [];
//        $pattern = '/<a href="#">\+[0-9]{0,2} [0-9]{0,3} [0-9]{0,3}-[0-9]{0,2}-[0-9]{0,2}<\/a>/isu';
        $pattern = '/<a href="#">\+([0-9 -]+)<\/a>/isu';
        preg_match_all($pattern, $html_in, $arMatches);
        return $arMatches[1];
    }

    echo "<br><pre>";
    var_dump(phone_pattern($input_html));
    echo "</pre><br>";
?>

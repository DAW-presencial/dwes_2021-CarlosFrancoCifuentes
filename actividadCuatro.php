<?php
    class Exam {
        public $propOne = 'one';
        public $propTwo = 'two';

        function examFunc() {
            print 'Inside `aMemberFunc()`';
        }
    }

    $exam = new Exam;
    $exam->a = "nulo";

    $examTwo = new Exam;

    var_dump(property_exists($examTwo, "a"));
    var_dump(isset($examTwo->a));
    var_dump(property_exists($exam, "a"));
    var_dump(property_exists($exam, "b"));
    var_dump(isset($exam->a));
    var_dump(isset($exam->b));

    $exam->b = "nuloDos";
    
?>
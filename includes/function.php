<?php

class Dac {
    // test input
    function testInput($inpVl){
        return htmlspecialchars(stripslashes(trim($inpVl)));
    }
    // show message error, success
    function showMessage($type, $mess) {
        return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
                    <strong>' . $mess . '</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
    }
}

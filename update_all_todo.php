<?php 
// Iterate through a list of ids of the todo items
function mark_all_as_done() {
        // create a prepared update statement
        $update_statement = $GLOBALS['conn']->prepare("UPDATE tasks SET done = 1 ");
        $update_statement->execute();
        $update_statement->close();
    
}
?>
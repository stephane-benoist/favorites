<?php 
/**
 * Status message for adding favorites via JSON.
 *
 */

$newLink = $this->element('favorites/like-link', compact('type', 'foreignKey'));

echo json_encode(compact('message', 'status', 'type', 'foreignKey', 'newLink'));

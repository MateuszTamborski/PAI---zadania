<h1>Edytuj ksiazke</h1>
<?php
	$options = array('dramat' => 'dramat','komedia' => 'komedia','fantastyka' =>'fantastyka', 'kryminal' =>'kryminal', 'fantastyka-naukowa' =>'fantastyka-naukowa');

	echo $this->Form->create('Book', array('url' => 'edit'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('title');
	echo $this->Form->input('author');
	echo $this->Form->input('genre',
					array('options'=>$options, 'default'=>'dramat'));
	echo $this->Form->end('Zapisz');
?>
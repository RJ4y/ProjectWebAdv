<html>
<head>
    <title>Insert Data Into Database Using CodeIgniter Form</title>
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>

<div id="container">
    <?php echo form_open('insert_ctrl'); ?>
    <h1>Insert Data Into Database Using CodeIgniter</h1><hr/>
    <?php if (isset($message)) { ?>
        <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
    <?php } ?>
    <?php echo form_label('Event Name :'); ?> <?php echo form_error('dname'); ?><br />
    <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

    <?php echo form_label('Klant id :'); ?> <?php echo form_error('Klant'); ?><br />
    <?php echo form_input(array('id' => 'Klant', 'name' => 'Klant')); ?><br />

    <?php echo form_label('Adres'); ?> <?php echo form_error('Adres'); ?><br />
    <?php echo form_input(array('id' => 'Adres', 'name' => 'Adres')); ?><br />

    <?php echo form_label('Type'); ?> <?php echo form_error('Type'); ?><br />
    <?php echo form_input(array('id' => 'Type', 'name' => 'Type')); ?><br />

    <?php echo form_label('Descriptions'); ?> <?php echo form_error('Descriptions'); ?><br />
    <?php echo form_input(array('id' => 'Descriptions', 'name' => 'Descriptions')); ?><br />

    <?php echo form_label('Personnel'); ?> <?php echo form_error('Personnel'); ?><br />
    <?php echo form_input(array('id' => 'Personnel', 'name' => 'Personnel')); ?><br />

    <?php echo form_label('Start_Date'); ?> <?php echo form_error('Start_Date'); ?><br />
    <?php echo form_input(array('id' => 'Start_Date', 'name' => 'Start_Date')); ?><br />

    <?php echo form_label('End_Date'); ?> <?php echo form_error('End_Date'); ?><br />
    <?php echo form_input(array('id' => 'End_Date', 'name' => 'End_Date')); ?><br />
    
    <?php echo form_submit(array('submit' => 'submit', 'value' => 'Submit')); ?>
    <?php echo form_close(); ?><br/>
    <div id="fugo">

    </div>
</div>
</body>
</html>
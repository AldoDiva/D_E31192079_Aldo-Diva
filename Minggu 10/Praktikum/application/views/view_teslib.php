<?php
        $template = array(
            'table_open' => '<table class="table table-striped w-50" cellpadding="4" cellspacing="0">',
            'table_close' => '</table>',
        );

        $this->table->set_template($template);
        $this->table->set_heading(array('No', 'Nama', 'Prodi'));
        $num = 1;

        foreach ($Mahasiswa as $row) {

            $this->table->add_row(array($num, $row['nama'], $row['prodi']));
            $num++;
        }
        echo $this->table->generate();
?>
<?php

// Make NA values NULL

$anura_columns = array(
'Family',
'Genus',
'Species',
'Sex',
'SVL',
'HL',
'HW',
'ED',
'TD',
'ETD',
'IOD',
'IND',
'UEW',
'EN',
'SL',
'NS',
'HAL',
'FLL',
'LAL',
'FL',
'TFL',
'TL',
'THL',
'TSL',
'HLL',
'IMT',
'Toe1L',
'Toe2L',
'Toe3L',
'Toe4L',
'Toe5L',
'Fin1L',
'Fin2L',
'Fin3L',
'Fin4L',
'Fin1DW',
'Fin2DW',
'Fin3DW',
'Fin4DW',
'Toe1DW',
'Toe2DW',
'Toe3DW',
'Toe4DW',
'Toe5DW',
'UAL',
'SUL'
);

$caudata_columns = array(
'Family',
'Genus',
'Species',
'Sex',
'TOL',
'SVL',
'TRL',
'AGS',
'HL',
'HW',
'IOD',
'ED',
'EN',
'UEW',
'IND',
'SL',
'TL',
'TW',
'TH',
'TAH',
'MTAW',
'FLL',
'HLL',
'F2L',
'F3L',
'T3L',
'T5L',
'SF',
'VL',
'ELL',
'SG');

$gymnophiona_columns = array(
'Family',
'Genus',
'Species',
'Sex',
'TOL',
'TL',
'TAW',
'SL',
'STFG',
'STSG',
'STTG',
'TA1',
'TA2',
'PVA',
'TRL',
'SVL',
'HL',
'HW1',
'HW2',
'BW1',
'BW2',
'BW3',
'IND',
'ED',
'EN',
'IOD',
'NS',
'ITD',
'TE',
'TN',
'TLP',
'TS',
'TJ',
'EJ',
'NJ',
'SJ',
'LJL',
'C1',
'C2',
'VL',
'VA'
);



foreach ($anura_columns as $column)
{
	echo 'UPDATE anura SET ' . $column . '=NULL WHERE ' . $column . '="NA";' . "\n";
}

foreach ($caudata_columns as $column)
{
	echo 'UPDATE caudata SET ' . $column . '=NULL WHERE ' . $column . '="NA";' . "\n";
}

foreach ($gymnophiona_columns as $column)
{
	echo 'UPDATE gymnophiona SET ' . $column . '=NULL WHERE ' . $column . '="NA";' . "\n";
}



?>

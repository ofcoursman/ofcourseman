<?php


$str = "vytvorte-tabu ku: hotel(id, meno, priezvisko, ulica, mesto, psc, typ_izby, ranajky, obed, vecera, datum)', 'vytvorte_str nku_s v berom typu izby-a stravy (ra ajky, obed aj ve era s samostatn jednotky) a formul rom na vlo enie z kladn ch inform cii o ubytovanom/ubytovan ch. pri-strave je potrebn definova aj po et os b. pozn mka: je-potrebn kontrolova obsadenie izieb. Ak je dan typ izby-obsaden ,_potom ho u nebude mo n viac vybra .', 'vytvorte str nku so_zoznamom rezerv ci . po v bere rezerv cie sa zobraz fakt ra, na ktorej bud inform cie o ubytovanom, d tum vystavenia fakt ry, doba_splatnosti-fakt ry (+2 t dne), v ber_stravy a rozp san jednotliv polo ky-aj s cenami-a nakoniec celkov suma za ubytovanie a stravu.";
$str = preg_replace_callback('/(?:^|[.!?]\h+\W*)\w/',
            function ($m) { return strtoupper($m[0]); }, $str);

 function remove($str) {
    $res = str_replace( array( '\'', '-',
     '_', ), ' ', $str);
    
    return $res;
}
$str = remove($str); 
echo $str; 



?>
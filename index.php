<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
  <h2>Snack 1</h2>

  <?php /*
    PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60*/
    $matches = [
      [
        'teamHome' => 'Torino',
        'teamVisiting' => 'Cagliari',
        'homePoint' => '60',
        'visitingPoint' => '40',
      ],
      [
        'teamHome' => 'Milano',
        'teamVisiting' => 'Roma',
        'homePoint' => '50',
        'visitingPoint' => '70',
      ],
      [
        'teamHome' => 'Napoli',
        'teamVisiting' => 'Genova',
        'homePoint' => '50',
        'visitingPoint' => '80',
      ],
    ];
    // var_dump($matches);
     
    ?>
    <h2>Risultato Partite</h2> 
    <!--apri qua { e chiudi giu-->
    <?php for($i = 0; $i < count($matches); $i++) { ?>

        <ul>
             <li>
                 <p><?php echo $matches[$i]['teamHome'] .' - ' .$matches[$i]['teamVisiting'] .' | ' .$matches[$i]['homePoint'] .' - ' .$matches[$i]['visitingPoint'];
                  ?>                
                </p>
             </li>
        </ul>  
    
    <?php } ?>


    <h2>Snack 2</h2>
    <?php /*
    PHP Snack 2:
    Passare come parametri GET (query string) name, mail e age
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri
    2. che mail contenga un punto e una chiocciola
    3. che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */ 
    $name = $_GET['name'];

    $mail = $_GET['mail'];
   
    $age = $_GET['age'];
    var_dump($name, $mail, $age);

    // oer il controllo  | strlen() per la lunghezza della della stringa
     if( strlen($name) <= 3) {
        echo 'Acesso Negato';
     }
     elseif( empty($mail) || strpos($mail, '@') === false || strpos($mail, '.') === false) {
       echo 'Accesso Negato';
     }
     elseif( is_numeric($age) === false) {
       echo 'Accessp Negato';
     }
     else {
       echo 'Acesso Consentito';
     }
     
    ?>

<?php 
/*SNACK 3
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. 
*/
?>
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
]; 

?>
<?php foreach($posts as $key => $post) { 
     // var_dump($post); ?>

      <h2>Post del <?php echo $key; ?></h2>
      <?php foreach($post as $value) { ?>
         <h3><?php  echo $value['title']; ?></h3>
         <h4><?php echo $value['author']; ?></h4>
         <h4><?php echo $value['text']; ?></h4>
      <?php } ?>
      


<?php }  ?> 


<?php 
 /*Snack 4
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
 */

$classe =  [
  
    [ 
       'nome' => 'Luca',
       'cognome' => 'Pippo',
        'voti' => [ 5, 4, 6 , 3],

    ],
  
    [
      'nome' => 'Marco',
      'cognome' => 'Pluto',
       'voti' => [5, 4, 6 , 3],

    ],

];
?>
<ul>
  <?php foreach($classe as $alunni) {
  // var_dump($alunni);
  $average = array_sum($alunni['voti']) / count($alunni['voti']); ?>
  <li>
     <?php echo $alunni['nome'] . ' ' .  $alunni['cognomi']; ?> 
     <?php echo number_format($average, 1); ?>

  </li>

<?php } ?>
</ul> 

<?php 
/**Prendere un testo abbastanza lungo, contenente diverse frasi.
  Suddividere il testo in tanti paragrafi <p>.
  Ad ogni punto (.) corrisponde un nuovo paragrafo.
 */
 $text = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
  Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
  nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
  Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
  In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.';

  $paragrafi = explode('.', $text);
   //var_dump($paragrafi);
 
   //loop con foreach 
  foreach($paragrafi as $paragrafo) {
   
    if(! empty($paragrafo)) { ?>
      <p><?php echo $paragrafo; ?> </p>
      <?php }
  } ?>




</body>
</html>
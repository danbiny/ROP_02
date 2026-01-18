<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Pictures/favicon.png">
    <title>Odstranit uživatele</title>
<style>
html,body{
    background: linear-gradient(135deg,  #136385, #48a33a, #ebdf32);
    height: 100%;
    font-family: sans-serif;
}
div
{

        text-align: center;
        padding: 2%;
        width: 100%;
     
}
form {
   
    margin: 20px auto;          
  padding: 20px;             
  max-width: 500px;           
  background-color: white;
  border-radius: 12px;       
  box-shadow: 0 4px 12px rgba(0,0,0,0.1); 
  display: flex;
  flex-direction: column;      
  gap: 15px;    
  border: none; 
  color: black;  
  
  button {
  background-color: #0c0c0c;
  border: 0;
  border-radius: 56px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
  font-size: 18px;
  font-weight: 600;
  outline: 0;
  padding: 16px 21px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  }
button:before {
  background-color: initial;
  background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
  border-radius: 125px;
  content: "";
  height: 50%;
  left: 4%;
  opacity: .5;
  position: absolute;
  top: 0;
  transition: all .3s;
  width: 92%;
}

  
button:hover {
 box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
  transform: scale(1.05);
}
}



@media (min-width: 768px) {
  button {
   padding: 16px 48px;

  }

  }

form input[type="text"],
form input[type="password"]{
  background-color: #e0e0e0;   
  border: none;                
  border-radius: 8px;          
  padding: 10px;
  font-size: 1rem;
  width: 100%;
  box-sizing: border-box;
}


@media (max-width: 600px) {
img {
    width: 300px;
}

}
    </style>
</head>
<body>
    <div>
        <main>
            <a href="/admini">
            <img src="Pictures/Logo.png" alt="Logo">
</a>
<form method="post" action="/delart">
   <h1>Opravdu si přejete odstranit tento článek?</h1>
   <input hidden name="name" value="<?php echo $id; ?>">
  <span> <label for="ano"><b>ANO</b></label>
<input type="radio" id="ano" name="bool" value=1></span>

<span><label for="ne"><b>NE</b></label>
<input type="radio" id="ne" name="bool" value=2 checked></span>


<button type="submit">Potvrdit volbu</button>
</form>
</main>
</div>

</body>
</html>
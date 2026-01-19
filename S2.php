<?php
echo"
<html>
<body>
    <script>
        <!--IF-->
let age=20;
if(age>=18){
console.log('You are eligible  to vote ');
}
<!--If Else-->
 let mark=50;
 if(mark>=50){
    console.log('Pass');
 }else{
    console.log('Fail');
 }
<!--IF_Else_ladder-->
 let score=40;
 if(score>=90){
    console.log('Grade A');
 }else if(score>=75){
    console.log('Grade B')}
    else if(score >=50){
        console.log('Grade C')
    }else{
        console.log('Fail')
    }
    <!--Switch operator-->
    let day=5;
    switch(day){
        case 1:
        console.log('Monday');
        break;
        case 2:
            console.log('Tuesday')
        break;
        case 3:
            console.log('Wednesday')
            break;
        case 4:
            console.log('Thursday')
            break;
        case 5:
            console.log('Friday')
        break;
        default:
            console.log('Invalid Day');
    }


<!--Ternary operator-->
let result=(age>=18) ? 'Adult':'Minor'
document.write(result)

 
 

</script>
</body>
</html>";
?>
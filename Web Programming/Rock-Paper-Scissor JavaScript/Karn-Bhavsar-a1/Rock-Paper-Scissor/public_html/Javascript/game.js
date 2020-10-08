/* 
 * Karn Bhavsar
 * Student ID: 991578281
 * SYST10199 - Web Programming
 */

var userWins = 0;
var computerWins = 0;
var tie = 0;
var Winner;
var options = ["ROCK","PAPER","SCISSOR"];


function player()
{
    var userChoice = prompt("Press 1 for ROCK\nPress 2 for PAPER\nPress 3 for SCISSOR");
    
    if(userChoice==1)
    {
        userChoice = "ROCK";
    }
    else if(userChoice == 2)
    {
        userChoice = "PAPER";
    }
    else if(userChoice == 3)
    {
        userChoice = "SCISSOR";
    }
    else
    {
        alert("Please enter a Valid number option");
        player();
    }
    
    var computerChoice = options[(Math.floor(Math.random()*3))];
    winner(userChoice,computerChoice);
    
    alert("You picked."+userChoice+" Computer picked "+computerChoice+"\n"+Winner+"\n"+"You: "+userWins+"\n"+"Computer: "+computerWins);
    finalScore();
}
player();


function winner(userChoice,computerChoice)
{
    
    if(userChoice == computerChoice)
    {
        Winner = "Tied";
        tie++;
        
        
    }
    else if(userChoice == "ROCK")
    {
        if(computerChoice == "SCISSOR")
        {
            Winner = "You Win";
            userWins++;
            
            
        }
        else if(computerChoice == "PAPER")
        {
            Winner = "Computer Win";
            computerWins++;
            
            
        }
    }
    else if(userChoice == "PAPER")
    {
        if(computerChoice == "ROCK")
        {
            Winner = "You Win";
            userWins++;
            
            
        }
        else if(computerChoice == "SCISSOR")
        {
            Winner = "Computer Win";
            computerWins++;
            
            
        }
    }
    else if(userChoice == "SCISSOR")
    {
        if(computerChoice == "PAPER")
        {
            Winner = "You Win";
            userWins++;   
            
            
        }
        else if(computerChoice == "ROCK")
        {
            Winner = "Computer Win";
            computerWins++;
            
            
        }
    }
}

function finalScore()
{
    var playAgain = confirm("Do you want to play again?");
    
    if(playAgain == false)
    {
        if(userWins == computerWins)
        {
            Winner = "Tied!!";
        }
        else if(userWins > computerWins)
        {
            Winner = "You Win !!";
        }
        else if(userWins < computerWins)
        {
            Winner = "Computer Wins"
        }
        
        alert("Final Score: "+"\n"+"You: "+userWins+"\n"+"Computer: "+computerWins+"\n"+Winner)
        exit();
    }  
    
    player();
    
        
    
    
}


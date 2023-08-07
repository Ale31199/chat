import React, { useState } from 'react';
import App from './App.js';
import './mainstyle.css';


export default function MainPage() {




  return (

    <div className='mainpage'>
      <div className='headermain'>
        <div className='right'><h1 className='titlemain'>SocialGame</h1></div>
        <div className='center'>
          <input className='input' type='text' placeholder='Search here...'></input>
        </div>

        <div className='left'>
          <div className='registermain'>
            <a className="textmain" href="http://localhost:3000/src/signup.php">Sign Up</a>
            <a className="textomain" href="http://localhost:3000/src/login.php">Log In</a>
          </div>
        </div>
      </div>

      <div className='grid'>
        <div className='gridx'>ss</div>
        <div className='gridx'>ss</div>
        <div className='gridx'>ss</div>
        <div className='gridx'>ss</div>
        <div className='gridx'>ss</div>
        <div className='gridx'>ss</div>
      </div>





    </div>
  )
}
import "./styles.css";
import React, { useState, useEffect, useRef } from "react";
import axios from 'axios';

const url = 'http://localhost:3000/src/file.php';


axios.get(url)
  .then(response => {
    console.log(response.data);
  })
  .catch(error => {
    console.error('Errore API:', error)
  })




export default function App() {
  const [textlines, settextlines] = useState([]);
  const [inputValue, setInputValue] = useState("");
  const scrollRef = useRef(null);


  const loop = () => {
    setTimeout(() => {
      let textpush = document.getElementById("msg").value;
      const newline = textpush.trim();
      settextlines([...textlines, newline]);
      setInputValue("");
    }, 450);
  };

  const removeline = () => {
    setTimeout(() => {
      const remove = [...textlines];
      remove.pop();
      settextlines(remove);
    }, 450);
  };

  const enter = (event) => {
    if (event.key === "Enter") {
      loop();
    }
  };

  const limitLetters = () => {
    const text = document.getElementById('msg').value;
    const limite = document.getElementById('limit').innerHTML = text.length

  }




  useEffect(() => {
    const scroll = scrollRef.current;
    if (scroll) {
      scroll.scrollTop = scroll.scrollHeight;
    }
  }, [textlines]);

  return (
    <div className="App" data-bs-theme="dark">
      <h1>Chat Test Alpha</h1>
      <h2>Developing something interesting!</h2>
      <div className="chatbox">
        <p className="limit" id="limit">{limitLetters}0</p>
        <p className="limite" id="limit">/1500</p>
        <input
          className="bar"
          id="msg"
          type="text"
          placeholder="Write something..."
          value={inputValue}
          onChange={(e) => setInputValue(e.target.value)}
          onInput={limitLetters}
          onKeyPress={enter}
          maxLength={1500}
        ></input>
      </div>
      <button className="send" id="send" onClick={loop}>
        Send
      </button>
      <div className="textbox" ref={scrollRef}>
        {textlines.map((line, index) => (
          <p className="messages" key={index} id="messages">
            {line}
          </p>
        ))}
      </div>

      <button className="delete" id="delete" onClick={removeline}>
        DELETE LAST MESSAGE
      </button>
    </div>
  );
}

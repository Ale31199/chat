import React, { useState } from "react";
import firebase from "./firebase";
import "./registerStyle.css"

const Register = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState(null);

  const handleRegister = () => {
    firebase
      .auth()
      .createUserWithEmailAndPassword(email, password)
      .then((userCredential) => {
        // L'utente è stato registrato con successo
        const user = userCredential.user;
        document.getElementById('registrato').innerHTML = ("Utente registrato:", user);
      })
      .catch((error) => {
        setError(error.message);
        console.error("Errore durante la registrazione:", error);
      });
  };

  return (
    <div className="form">
      <h2>Register</h2>
      <input className="email"
        type="email"
        placeholder="Email Address"
        value={email}
        onChange={(e) => setEmail(e.target.value)}
      />
      <input className="pass"
        type="password"
        placeholder="Password"
        value={password}
        onChange={(e) => setPassword(e.target.value)}
      />
      <button className="reg" onClick={handleRegister}>Register</button>
      {error && <p>{error}</p>}
      <p id="registrato"></p>
    </div>
  );
};

export default Register;

import React, { useState } from "react";
import firebase from "./firebase";

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
        console.log("Utente registrato:", user);
      })
      .catch((error) => {
        setError(error.message);
        console.error("Errore durante la registrazione:", error);
      });
  };

  return (
    <div>
      <h2>Registrati</h2>
      <input
        type="email"
        placeholder="Indirizzo email"
        value={email}
        onChange={(e) => setEmail(e.target.value)}
      />
      <input
        type="password"
        placeholder="Password"
        value={password}
        onChange={(e) => setPassword(e.target.value)}
      />
      <button onClick={handleRegister}>Registrati</button>
      {error && <p>{error}</p>}
    </div>
  );
};

export default Register;

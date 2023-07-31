import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App";
import RegisterPage from './RegisterPage';
import { BrowserRouter, Routes, Route } from "react-router-dom";



/*<Route path="/" element={<App />} />*/

export default function Main() {
  return (

    <BrowserRouter>
      <Routes>
        <Route path="/" element={<App />} >
          <Route path="register" element={<RegisterPage />} />


        </Route>
      </Routes>
    </BrowserRouter>


  )
}



const rootElement = document.getElementById("root");
const root = ReactDOM.createRoot(rootElement);

root.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);

import React from "react";
import ReactDOM from "react-dom";
import App from "./App";
import RegisterPage from "./registerPage";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import MainPage from "./mainpage";

function Main() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<MainPage />}>
          <Route path="register" element={<RegisterPage />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

const rootElement = document.getElementById("root");
ReactDOM.render(
  <React.StrictMode>
    <Main />
  </React.StrictMode>,
  rootElement
);

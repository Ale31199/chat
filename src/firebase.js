// Import the functions you need from the SDKs you need
import firebase from "firebase/compat/app";
import "firebase/compat/auth";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyAmCnYon85miS5gxz-zg1E0XzcfyVt4V3w",
  authDomain: "chat-online-c550b.firebaseapp.com",
  projectId: "chat-online-c550b",
  storageBucket: "chat-online-c550b.appspot.com",
  messagingSenderId: "847763090920",
  appId: "1:847763090920:web:ee84f8cc7bfc3dc024885d",
  measurementId: "G-8956DXH4LL"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

export default firebase;
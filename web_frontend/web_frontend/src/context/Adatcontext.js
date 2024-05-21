import React,{createContext,useContext,useState, useEffect, useCallback} from "react";

import Axios from "../api/Axios";
import axios from "axios";
const AdatContext=createContext();

export const AdatProvider=({children})=>{
const[szavak, setSzavak]=useState([]);
const[tema, setTema]=useState([]);
const[szavakList, setSzavakList]=useState([]);
 const getLista=async(vegpont, callBack)=>{
    const{data}=await axios.get(vegpont);
    callBack(data);
 }
 useEffect(()=>{
  // getLista("http://localhost:8000/api/szavakList", setSzavak)
   // getLista("http://localhost:8000/api/tema", setTema)

 },[szavak, tema]);

 return(
    <AdatContext.Provider 
    value={{szavakList, tema}}>
    {children}
    </AdatContext.Provider>
 )}
 export default function useAdatContext(){
    return useContext(AdatContext);
 }
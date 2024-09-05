"use client";

import { useState } from "react";
import styles from "./page.module.css";

export default function Home() {
  const baseUrl = "http://localhost/api/cats";

  const [facts, setFacts] = useState([
    {
      id: 2,
      fact: "Gatos são cães",
      created_by: "JOrssssssss",
      created_at: "2024-08-22T11:57:28.000000Z",
      updated_at: "2024-08-22T11:57:28.000000Z",
    },
  ]);

  async function getData() {
    console.log("OLA");
    // espera resposta
    let response = await fetch(baseUrl);

    response = await response.json();

    console.log("tchau" + response);
    console.log(response);
  }

  getData();

  return (
    <div className={styles.page}>
      <h1>FATOS DE GATOS</h1>
      <p>{facts[0].id}</p>
      <p>{facts[0].fact}</p>
      <p>{facts[0].created_at}</p>
      <p>{facts[0].created_by}</p>
      <p>{facts[0].updated_at}</p>
    </div>
  );
}

'use client'
import supabase from "../supabase";
import { useEffect } from "react";
import styles from "./page.module.css";

export default function Home() {
  useEffect(() => {

    const fetchPerson = async () => {
      const { data, error } = await supabase
        .from("pessoa")
        .select("*")
        .limit(1);
        console.log(data)

      if (error) {
        console.error("Error fetching person:", error);
      } else {
        const person = data[0];
        console.log("Person:", person);
      }
    };

    fetchPerson();
  }, []);

  return (
    <main className={styles.container}>
      <div className={styles.header}>
        <h1>ID: 123</h1>
        <h1>Nome: John Doe</h1>
        <h1>Peso: 70kg</h1>
        <h1>Altura: 180cm</h1>
      </div>
      <table className={styles.exercisesTable}>
        <thead>
          <tr>
            <th>Exercício</th>
            <th>Séries x Repetições</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Supino</td>
            <td>3x10</td>
          </tr>
          <tr>
            <td>Agachamento</td>
            <td>3x10</td>
          </tr>
          <tr>
            <td>Desenvolvimento</td>
            <td>3x10</td>
          </tr>
        </tbody>
      </table>
    </main>
  );
}


import { useState,useEffect } from 'react'

import Flight from './Flight.js'
import styles from './Styles.module.css';

const API = 'https://tu.proti.lv/flights/';

function App() {
  const [data , setData] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
  
      fetch(API)
    .then(response => response.json())
    .then(data => setData(data))
    .then(setLoading(false))
    }
  ,[])

  const flightsJS = data.map((flight , key)=>{
    return <Flight flight={flight} key={key}/>
  })

  return (
    <>
      <div className={styles.logoHolder}>
        <img className={styles.logo} src='./santa-airlines-logo.png' />
      </div>
      <div className={styles.textTemp}>
        <h1 className={styles.text} >flight schedule</h1>  
      </div>
      {loading
       ? <p>Loading...</p> 
       : <div>{flightsJS}</div>
      }
    </>
  )
}

export default App

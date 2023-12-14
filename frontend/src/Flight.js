import styles from './Styles.module.css';

function Flight(props) {

  return (
    <div className={styles.flight}>
      <div>
      <img src='./plane-departure.svg' style={{ filter: 'brightness(0) invert(1)', width: '80px', height: '80px' }} />
        <h2>{props.flight.origin}</h2>
      </div>
      <div style={{ textAlign: 'center' }}>
  <p style={{ color: 'white' }}>{props.flight.flightDuration}</p>
  <p style={{ color: 'white' }}>{props.flight.flightNumber}</p>
  <p className={styles.flightbar} style={{ color: 'white' }}>
    - - - - - - - - - - - - - - - - - - - -
  </p>
</div>
      <div>
        <img src='./plane-arrival.svg' style={{ filter: 'brightness(0) invert(1)' , width: '80px', height: '80px'}}/>
        <h2>{props.flight.destination}</h2>
      </div>
    </div>
  )
}

export default Flight

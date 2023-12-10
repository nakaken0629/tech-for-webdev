import styles from './productItem.module.css'

export default function ProductItem(props : any) {
    return (
      <div className={styles.box}>
        <h3>{props.name}</h3>
        <hr />
        <p>値段：¥{props.price}</p>
        <p><img className={styles.photo} src={`/image/${props.photo}`} /></p>
      </div>
    )
  }

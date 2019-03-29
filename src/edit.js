export const Edit = props => {
  const { text } = props.attributes
  const onChange = event => props.setAttributes({ text: event.target.value })
  console.log('000')
  return (
    <div>
      <label htmlFor={'echo-text'}>{'Echo: '}</label>
      <input id={'echo-text'} type={'text'} value={text} onChange={onChange} />
    </div>
  )
}

export default Edit

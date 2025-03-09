import { Input, Btn, Row } from './CustomInput.styles';

function CustomInput({ onChange, value }) {
  return (
    <Row>
      <Btn onClick={() => onChange(parseInt(value) + 1)}>+</Btn>
      <Input onChange={(e) => onChange(e.target.value)} value={value} />
      <Btn onClick={() => onChange(value == 0 ? 0 : parseInt(value) - 1)}>-</Btn>
    </Row>
  );
}

export default CustomInput;

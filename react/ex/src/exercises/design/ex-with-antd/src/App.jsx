import { useState } from 'react';
import {
  App as AppAntd, Input, Button, Row, Col, Form, Drawer,
} from 'antd';

const initialValues = {
  name: 'John',
  age: 32,
  height: 1.75,
};

function App() {
  const [showDrawer, setShowDrawer] = useState(false);
  const { modal } = AppAntd.useApp();

  const onFinish = (values) => {
    modal.confirm({
      title: 'Info guardada',
      content: (
        <div>
          <p>
            Nombre:
            {values.name}
          </p>
          <p>
            Edad:
            {values.age}
          </p>
          <p>
            Altura:
            {values.height}
          </p>
        </div>
      ),
      width: 700,
      cancelText: 'No',
      okText: 'Sí',
      onOk: () => {
        console.log('OK');
      },
      onCancel: () => {
        console.log('Cancel');
      },
    });
  };

  return (
    <>
      <Row>
        <Col xs={12}>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vitae
            rerum asperiores magni ullam dolorem reprehenderit quas eum omnis
            debitis, adipisci quisquam corporis aliquam officia numquam sequi
            itaque id ipsam!
          </p>

          <Button type="primary" onClick={() => setShowDrawer(true)}>
            Desplegar menú lateral
          </Button>
        </Col>
        <Col span={12}>
          <Form initialValues={initialValues} onFinish={onFinish}>
            <Form.Item name="name">
              <Input />
            </Form.Item>
            <Form.Item name="age">
              <Input />
            </Form.Item>
            <Form.Item name="height">
              <Input />
            </Form.Item>
            <Button type="primary" htmlType="submit">
              Enviar
            </Button>
          </Form>
        </Col>
      </Row>

      <Drawer
        title="Drawer"
        placement="right"
        width={500}
        onClose={() => setShowDrawer(false)}
        open={showDrawer}
      >
        <p>Info del drawer</p>
      </Drawer>
    </>
  );
}

export default App;

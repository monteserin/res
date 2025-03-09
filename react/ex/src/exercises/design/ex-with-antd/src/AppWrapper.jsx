import { ConfigProvider, App as AntdApp } from 'antd';
import App from './App';

function AppWrapper() {
  const theme = {
    token: {
      colorPrimary: 'red',
    },
  };
  return (
    <div>
      <ConfigProvider theme={theme}>
        <AntdApp>
          <App />
        </AntdApp>
      </ConfigProvider>
    </div>
  );
}

export default AppWrapper;

import { defineConfig, loadEnv } from 'vite'
import react from '@vitejs/plugin-react'


export default ({ mode }) => {
  const env = { ...process.env, ...loadEnv(mode, process.cwd()) };

  console.log(env)

  const config = {
    plugins: [react()],
    base: env.VITE_PUBLIC_URL,
  }
  return defineConfig(config);
};

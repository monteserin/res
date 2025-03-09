
const { app, BrowserWindow } = require('electron');
const path = require('path');
const url = require('url');

function createWindow() {
    const win = new BrowserWindow({
        width: 800,
        height: 600,
        webPreferences: {
            nodeIntegration: true,
            contextIsolation: false
        }
    });

    const startUrl = process.env.NODE_ENV === 'development'
        ? 'http://localhost:3000' // URL for Vite dev server
        : url.format({
            pathname: path.join(__dirname, '/dist/index.html'), // Path for production build
            protocol: 'file:',
            slashes: true
        });

    win.loadURL(startUrl);
}

app.whenReady().then(createWindow);

app.on('window-all-closed', () => {
    if (process.platform !== 'darwin') {
        app.quit();
    }
});

app.on('activate', () => {
    if (BrowserWindow.getAllWindows().length === 0) {
        createWindow();
    }
});
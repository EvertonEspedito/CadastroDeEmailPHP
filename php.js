const { spawn } = require('child_process');
const path = require('path');

exports.handler = (event, context, callback) => {
  const scriptPath = path.resolve(__dirname, 'index.php');
  const php = spawn('php', [scriptPath]);

  let output = '';
  php.stdout.on('data', (data) => {
    output += data.toString();
  });

  php.stderr.on('data', (data) => {
    console.error(data.toString());
  });

  php.on('close', (code) => {
    if (code === 0) {
      callback(null, {
        statusCode: 200,
        body: output
      });
    } else {
      callback(new Error(`PHP script exited with code ${code}`));
    }
  });
};

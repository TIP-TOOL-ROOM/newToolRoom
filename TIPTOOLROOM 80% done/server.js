const express = require('express');
const session = require('express-session');
const bodyParser = require('body-parser');

const app = express();
const PORT = 3000;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(session({
  secret: 'your-secret-key',
  resave: false,
  saveUninitialized: true
}));

app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});
// Mock user data
const users = [
    { id: 1, username: 'user1', password: 'password1' },
    { id: 2, username: 'user2', password: 'password2' }
  ];
  
  // Login route
  app.post('/login', (req, res) => {
    const { username, password } = req.body;
  
    // Check if username and password match
    const user = users.find(user => user.username === username && user.password === password);
  
    if (user) {
      // Store user session information
      req.session.user = user;
      res.redirect('/ecommerce'); // Redirect to the e-commerce webpage
    } else {
      res.send('Invalid username or password');
    }
  });
// Serve the login page
app.get('/login', (req, res) => {
    res.sendFile(__dirname + '/login.html');
  });
  
  // Serve the e-commerce webpage
  app.get('/ecommerce', (req, res) => {
    // Check if user is authenticated
    if (req.session.user) {
      res.sendFile(__dirname + '/ecommerce.html');
    } else {
      res.redirect('/login');
    }
  });
  app.post('/login', (req, res) => {
    const { username, password } = req.body;
  
    // Check if username and password match
    const user = users.find(user => user.username === username && user.password === password);
  
    if (user) {
      // Store user session information
      req.session.user = user;
      res.redirect('/ecommerce'); // Redirect to the e-commerce webpage
    } else {
      res.send('Invalid username or password');
    }
  });
  app.get('/ecommerce', (req, res) => {
    // Check if the user is authenticated
    if (req.session.user) {
      // Pass the necessary authentication information to the e-commerce webpage
      const { username, id } = req.session.user;
      res.cookie('userId', id);
      res.cookie('username', username);
      res.sendFile(__dirname + '/ecommerce.html');
    } else {
      res.redirect('/login'); // Redirect to the login page if the user is not authenticated
    }
  });
<script>
  // Retrieve authentication information from cookies
  const userId = document.cookie.replace(/(?:(?:^|.*;\s*)userId\s*\=\s*([^;]*).*$)|^.*$/, '$1');
  const username = document.cookie.replace(/(?:(?:^|.*;\s*)username\s*\=\s*([^;]*).*$)|^.*$/, '$1');

  // Use the authentication information as needed in your e-commerce webpage
  console.log('User ID:', userId);
  console.log('Username:', username);
</script>
    
    
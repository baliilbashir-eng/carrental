* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background: #0a0a0a;
  color: #f5f3ee;
}

/* NAV */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.5rem 4rem;
  background: rgba(10,10,10,0.95);
  border-bottom: 1px solid rgba(200,168,75,0.2);
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 100;
}

.logo {
  font-size: 1.8rem;
  font-weight: 900;
  color: #c8a84b;
  letter-spacing: 0.1em;
}

.logo span {
  color: #f5f3ee;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 2rem;
}

nav ul li a {
  text-decoration: none;
  color: #f5f3ee;
  font-size: 0.9rem;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  opacity: 0.7;
  transition: opacity 0.2s;
}

nav ul li a:hover {
  opacity: 1;
  color: #c8a84b;
}

nav ul li a.btn {
  background: #c8a84b;
  color: #0a0a0a;
  padding: 0.6rem 1.4rem;
  border-radius: 2px;
  opacity: 1;
  font-weight: 700;
}

nav ul li a.btn:hover {
  background: #e8cb7a;
}

/* HERO */
.hero {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 8rem 2rem 4rem;
  background: linear-gradient(135deg, #0a0a0a, #1a1208);
}

.hero h1 {
  font-size: 5rem;
  font-weight: 900;
  line-height: 1;
  margin-bottom: 1rem;
}

.hero h1 span {
  color: #c8a84b;
}

.hero p {
  font-size: 1.2rem;
  opacity: 0.6;
  margin-bottom: 2rem;
}

.hero .btn {
  background: #c8a84b;
  color: #0a0a0a;
  padding: 1rem 2.5rem;
  text-decoration: none;
  font-weight: 700;
  font-size: 1rem;
  border-radius: 2px;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  transition: background 0.2s;
}

.hero .btn:hover {
  background: #e8cb7a;
}

/* FOOTER */
footer {
  text-align: center;
  padding: 2rem;
  border-top: 1px solid rgba(200,168,75,0.2);
  font-size: 0.85rem;
  opacity: 0.5;
  margin-top: 4rem;
}
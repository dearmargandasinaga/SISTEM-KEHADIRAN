body {
    font-family: Arial, sans-serif;
    background-color: #f0f4f8;
    color: #333;
}

.login-body, .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container, .container {
    border: 2px solid #333;
    padding: 20px;
    background-color: #fefdfa;
    color: #0f0e0e;
}

h1, h2 {
    color: #003366;
}

button {
    background-color: #fdb813; /* Warna kuning */
    color: #003366;
    padding: 10px;
    margin: 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

button:hover {
    background-color: #003366;
    color: #fdb813;
}

.button-section {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.button-section .status {
    flex: 1;
}

.button-section .logout {
    align-self: flex-end;
}

footer {
    margin-top: 20px;
    text-align: center;
    color: #003366;
    font-size: 12px;
}

.error {
    color: red;
}

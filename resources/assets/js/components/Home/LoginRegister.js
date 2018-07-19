import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class LoginRegister extends Component {
  render() {
    return (
      <section className="section section-dark">
        <h2>Login to Acess Your Boards. Register to Create a New Board.</h2>
        {/* <!-- Create New Board Code --> */}
        <div id="app">
          <div id="start-board">
            <div className="container">
              <div className="flex-row row justify-content-center">
                <div className="col-6-md col-12-xs" style={{ marginRight: 10 }}>
                  <a href="/login">
                    <button
                      className="btn btn-primary btn-lg "
                      id="login">
                      Login
                  </button>
                  </a>
                </div>
                <div className="col-6-md col-12-xs">
                  <a href="/register">
                    <button
                      className="btn btn-primary btn-lg new-item form-control"
                      id="register"
                    >
                      Register
                  </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    );
  }
}

if (document.getElementById("loginRegister")) {
  ReactDOM.render(<LoginRegister />, document.getElementById("loginRegister"));
}

import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class CreateBoard extends Component {
  render() {
    return (
      <section className="section section-dark">
        <h2>Create Your Board</h2>

        {/* <!-- Create New Board Code --> */}

        <form action="/api/boards" method="POST" id="start-board">
          <div className="container">
            <div className="flex-row row justify-content-center">
              <div className="col-6-md col-12-xs" style={{ marginRight: 10 }}>
                <input
                  className="new-item form-control"
                  placeholder="Your New Board Name"
                  type="text"
                  id="boardName"
                  required="required"
                  name="name"
                />
              </div>
              {/* <div className="col-4-md col-12-xs" style={{ marginRight: 10 }}>
                <input
                  className="new-item form-control"
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                  placeholder="Your Email"
                  type="email"
                  id="ownerEmail"
                  required="required"
                  name="email"
                />
              </div> */}
              <div className="col-4-md col-12-xs">
                {/* Need to change href for proper route */}
                <a href="{{ url('/home') }}">
                  {" "}
                  <button
                    value="Create New Board"
                    type="submit"
                    className="btn btn-primary"
                    data-toggle="modal"
                    id="createBoard"
                  >
                    Create New Board
                  </button>
                  {/* <div id="errorModal"></div>
                  <div id="inviteModal"></div> */}
                </a>
              </div>
            </div>
          </div>
        </form>
      </section>
    );
  }
}

if (document.getElementById("createBoard")) {
  ReactDOM.render(<CreateBoard />, document.getElementById("createBoard"));
}

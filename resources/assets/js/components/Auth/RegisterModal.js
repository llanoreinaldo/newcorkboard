import React, { Component } from 'react';
import ReactDOM from 'react-dom';

// ReactModal.setAppElement('#register');

export default class RegisterApp extends Component {
  render() {
    return (

class RegisterApp extends React.Component {
  constructor () {
    super();
    this.state = {
      showModal: false
    };
    
    this.handleOpenModal = this.handleOpenModal.bind(this);
    this.handleCloseModal = this.handleCloseModal.bind(this);
  }
  
  handleOpenModal () {
    this.setState({ showModal: true });
  }
  
  handleCloseModal () {
    this.setState({ showModal: false });
  }
  
  render () {
    return (
      <div>
        <button onClick={this.handleOpenModal}>Register</button>
        <ReactModal 
           isOpen={this.state.showModal}
           contentLabel="onRequestClose"
           onRequestClose={this.handleCloseModal}
        >
        {/* Enter Modal Features Here */}
          <p>Modal text!</p>
          
          <button onClick={this.handleCloseModal}>Submit</button>
        </ReactModal>
      </div>
    );
  }
}

);
}
}
const props = {};

if (document.getElementById('#register')) {
ReactDOM.render(<RegisterApp {...props} />, document.getElementById('#register'))
}

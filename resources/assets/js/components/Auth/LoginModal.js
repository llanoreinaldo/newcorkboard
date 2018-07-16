
ReactModal.setAppElement('#login');

class LoginApp extends React.Component {
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
        <button onClick={this.handleOpenModal}>Login</button>
        <ReactModal 
           isOpen={this.state.showModal}
           contentLabel="onRequestClose Example"
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

const props = {};

ReactDOM.render(<LoginApp {...props} />, document.getElementById('login'))

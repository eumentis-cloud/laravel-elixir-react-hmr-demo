import React from 'react';

export default class Counter extends React.Component {
    constructor(props) {
        super(props);
        this.state = {count: 0};
    }

    componentDidMount() {
        this.interval = setInterval(this.tick.bind(this), 1000);
    }

    tick() {
        this.setState({
            count: this.state.count + 1
        });
    }

    componentWillUnmount() {
        clearInterval(this.interval);
    }

    render() {
        return (
            <div className={"panel panel-primary"}>
                <div className={"panel-heading"}>React component</div>
                <div className={"panel-body"}>
                    <h2>React hot loading demo</h2>
                    <h1>{this.state.count}</h1>
                    <br/>
                    <p>Change this text in 'Counter.jsx' and save. <br/>The content will update without resetting the counter.</p>
                    <p><b>Go ahead, give it a try.</b></p>
                </div>
            </div>
        );
    }
}
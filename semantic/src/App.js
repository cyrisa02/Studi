import { Container, Header, Button, Segment, Input } from "semantic-ui-react";

function App() {
  return (
    <div style={{ padding: 20 }}>
      <Container text>
        <Header as="h2">Titre de la page</Header>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
          commodo ligula eget dolor. Aenean massa strong. Cum sociis natoque
          penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
          Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
          aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
          imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede link
          mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum
          semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
          porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
          dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla
          ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam
          ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
        </p>
        <Segment inverted color="blue">
          <b>Indiquez votre site internet :</b>
        </Segment>
        <Input label="http://" placeholder="votresite.fr" />{" "}
        <Button color="green">Valider</Button>{" "}
        <Button color="red">Effacer</Button>
      </Container>
    </div>
  );
}

export default App;
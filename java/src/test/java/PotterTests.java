import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

public class PotterTests {

    @Test
    public void Should_Work() {
        Assertions.assertTrue(true);
    }

    @Test
    public void Should_Not_Work() {
        Potter potter = new Potter();
        Assertions.assertEquals(0, potter.getPrice(new int[]{0}));
    }
}
